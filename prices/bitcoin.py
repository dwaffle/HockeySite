import requests

key = '6a04a454-1d90-4c74-8e8f-7c628ca55e61'
headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'X-CMC_PRO_API_KEY': key}
coinurl = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest'
html_text = requests.get(coinurl, headers=headers).text
coin_file = open(r"coin.txt", "w+")
coin_file.writelines(html_text)
coin_file.close()