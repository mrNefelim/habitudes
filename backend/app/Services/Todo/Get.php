<?php


namespace App\Services\Todo;


use App\Habitude;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Get
{
    /**
     * @param Request $request
     * @return Collection
     */
    public function behave(Request $request)
    {
        $oldDate = Carbon::parse($request->date)->subDays(21)->format('Y-m-d');

        return Habitude::whereUserId($request->user()->id)
            ->withCount([
                'todos as today_todo' => function ($query) use ($request)
                {
                    $query->whereDate('date', '=', $request->date);
                },
                'todos as month_todo' => function ($query) use ($oldDate)
                {
                    $query->whereDate('date', '>', $oldDate);
                },
            ])
            ->get()
            ->map(function ($item)
            {
                $item['show'] = $item['today_todo'] <= 0;

                return $item;
            });
    }
}
