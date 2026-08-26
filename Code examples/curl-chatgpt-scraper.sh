curl 'https://data.oxylabs.io/v1/queries' \
--user 'USERNAME:PASSWORD' \
-H 'Content-Type: application/json' \
-d '{
        "source": "chatgpt",
        "prompt": "best supplements for better sleep",
        "parse": true,
        "geo_location": "United States",
        "callback_url": "https://your-server.com/oxylabs-callback"
    }'
