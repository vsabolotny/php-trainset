# php-trainer
A set of coding exercise solutions which you can run in the docker php container.

Build docker image:
```
% docker build -t php-cli . 
```

Run docker php-cli container with a specific script from src/ folder:
```
% docker run -it --rm php-cli php <helloworld.php>

Welcome to PHP CLI 
```