import requests
headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
teamsurl = 'https://statsapi.web.nhl.com/api/v1/teams'
html_text = requests.get(teamsurl, headers=headers).text

team_file = open(r"teams.txt", "w+")
team_file.writelines(html_text)
team_file.close()