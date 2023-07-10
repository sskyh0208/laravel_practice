FROM node:18-alpine as node
FROM nginx:1.25-alpine

ENV TZ=Asia/Tokyo

RUN apk update && \
    apk add --update --no-cache --virtual=.build-dependencies g++

COPY --from=node /usr/local/bin /usr/local/bin
COPY --from=node /usr/local/lib /usr/local/lib
COPY --from=node /opt /opt
COPY ./*.conf /etc/nginx/conf.d/

WORKDIR /work/src