FROM webdevops/php-nginx:7.4

# Fix Apple Silicon M1 ARM problem
# see https://github.com/webdevops/Dockerfile/issues/395
RUN wget -O "/usr/local/bin/go-replace" "https://github.com/webdevops/goreplace/releases/download/1.1.2/gr-arm64-linux" \
    && chmod +x "/usr/local/bin/go-replace" \
    && "/usr/local/bin/go-replace" --version
    
COPY --chown=application:application  . /app
WORKDIR /app
USER application

EXPOSE 80 443