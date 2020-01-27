FROM node:lts-alpine

ENV APP_ROOT /web
WORKDIR ${APP_ROOT}

RUN yarn install

CMD ["yarn", "run", "dev"]

