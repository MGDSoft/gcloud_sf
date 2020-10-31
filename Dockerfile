FROM gcr.io/google-appengine/php

RUN apt-get update \
    && apt-get -y --no-install-recommends install php-mysql