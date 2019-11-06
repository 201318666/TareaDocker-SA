FROM mysql:5.7
ENV MYSQL_ROOT_PASSWORD 123
ENV MYSQL_USER usuariobd
ENV MYSQL_PASSWORD 1234
ENV MYSQL_DATABASE tareadocker
ADD ./sql-scripts/ /docker-entrypoint-initdb.d/
