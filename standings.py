import requests
import sys
import time

args = sys.argv[1]
headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
teamsurl = 'https://statsapi.web.nhl.com/api/v1/teams/' + str(args) + '/stats'

html_text = requests.get(teamsurl, headers=headers).text
#Any time a team is updated, also update the stats file.
statsurl = 'https://statsapi.web.nhl.com/api/v1/standings'
stats_text = requests.get(statsurl, headers=headers).text
stats_file = open(r"Stats.txt", "w+")
stats_file.writelines(stats_text)
stats_file.close()
team_file = open(r"Standings" + str(args) + ".txt", "w+")
team_file.writelines(html_text)
team_file.close()