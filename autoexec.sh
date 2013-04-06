#!/bin/sh

while inotifywait -e modify src -e modify tests --exclude .git
do
        ant lint phpmd phpcs phpunit
done

