user= 1000
group= 1000
up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose build

shell: 
	docker-compose exec --user=1000 web bash

