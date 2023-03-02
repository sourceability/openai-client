FROM thecodingmachine/php:8.1-v4-cli

COPY --from=mikefarah/yq /usr/bin/yq /usr/bin/yq

RUN sudo apt-get update ; sudo apt-get install -y make
