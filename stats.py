import requests

statsurl = 'https://statsapi.web.nhl.com/api/v1/standings'
stats_text = requests.get(statsurl, headers=headers).text
stats_file = open(r"Stats.txt", "w+")
stats_file.writelines(stats_text)
stats_file.close()