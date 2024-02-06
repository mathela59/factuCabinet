start:
	docker-compose -f /home/mathieu/workspace/factuCabinet/run/dev/docker-compose.yaml up -d

stop:
	docker-compose -f /home/mathieu/workspace/factuCabinet/run/dev/docker-compose.yaml down

exec:
	docker exec -it dev_web_1 bash
