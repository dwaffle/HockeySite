import requests

headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
newsurl = 'https://api.nytimes.com/svc/topstories/v2/world.json?api-key=svZ6GtTChW3IjLgj9BtOb68x3veW7qUn'
html_text = requests.get(newsurl, headers=headers).text
news_file = open(r"News.txt", "w+")
news_file.writelines(html_text)
news_file.close()