FROM linkbn/php-openshift:7.4-fpm
ARG YII_ENV
ARG USER_ID=2000
USER root
ENV APP_WRITE_DIRECTORIES "."
COPY . /app/
RUN /docker-bin/docker-build.sh
USER ${USER_ID}