curl 'https://realtime.oxylabs.io/v1/queries' \
--user 'USERNAME:PASSWORD' \
-H 'Content-Type: application/json' \
-d '{
        "source": "chatgpt",
        "prompt": "best supplements for better sleep",
        "parse": true,
        "search": true,
        "geo_location": "United States"
    }'
