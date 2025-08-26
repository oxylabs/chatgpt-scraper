# ChatGPT Scraper

[![Oxylabs promo code](https://raw.githubusercontent.com/oxylabs/product-integrations/refs/heads/master/Affiliate-Universal-1090x275.png)](https://oxylabs.io/pages/gitoxy?utm_source=877&utm_medium=affiliate&groupid=877&utm_content=walmart-scraper-github&transaction_id=102f49063ab94276ae8f116d224b67)

[![](https://dcbadge.vercel.app/api/server/eWsVUJrnG5)](https://discord.gg/GbxmdGhZjq)

The [ChatGPT Scraper](https://oxylabs.io/products/scraper-api/serp/chatgpt) by Oxylabs allows you to send prompts to ChatGPT and automatically collect both conversational responses and structured metadata. You can use the [Web Scraper API](https://oxylabs.io/products/scraper-api) with ChatGPT for SEO monitoring, AI response analysis, and brand presence tracking. It provides parsed, ready-to-use JSON output without the need to manage proxies, browsers, or avoid anti-bot systems.

---

## How it works

You can gather ChatGPT response results by simply providing a prompt and valid Web Scraper API credentials. Once authenticated, you can make a simple POST request to the API as shown below.

### Request sample (Python)

```python
import requests
from pprint import pprint

# Structure payload
payload = {
    'source': 'chatgpt',
    'prompt': 'best supplements for better sleep',
    'parse': True,
    'search': True,
    'geo_location': "United States"
}

# Get response
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('USERNAME', 'PASSWORD'),
    json=payload,
)
# Print prettified response
pprint(response.json())
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/chatgpt-scraper/tree/main/code%20examples)
---

### Request parameters

| Parameter          | Description                                        | Default Value |
|--------------------|----------------------------------------------------|---------------|
| source (mandatory) | Sets the scraper.                                  | chatgpt       |
| prompt (mandatory) | The input prompt to submit (max 4000 characters).  | –             |
| search             | Trigger ChatGPT web search for the prompt.         | true          |
| geo_location       | Specify a country to send the prompt from.         | –             |
| render             | JavaScript rendering is enforced by default for chatgpt. | –     |
| parse              | Return parsed structured data.                     | true          |
| callback_url       | URL for asynchronous callbacks.                    | –             |

---
### Output samples

**HTML example:**

![HTML Example](image.png)

This is a structured JSON snippet of the response output:

```json
{
    "results": [
        {
            "content": {
                "prompt": "best supplements for better sleep",
                "llm_model": "gpt-4o",
                "markdown_json": ["json here"],
                "markdown_text": "Improving sleep through supplements...",
                "response_text": "Improving sleep through supplements...",
                "parse_status_code": 12000
            },
            "created_at": "2025-07-21 09:44:41",
            "updated_at": "2025-07-21 09:45:17",
            "page": 1,
            "url": "https://chatgpt.com/?hints=search",
            "job_id": "7352996936896485377",
            "is_render_forced": false,
            "status_code": 200,
            "parser_type": "chatgpt",
            "parser_preset": null
        }
    ]
}
```
