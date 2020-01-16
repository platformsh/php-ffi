
## User-friendly targets.

all: inline preload

preload: points.so
	php -d opcache.preload="preloader.php" -d opcache.enable_cli=true preload.php

inline: points.so
	php -d opcache.enable_cli=true inline.php

clean:
	rm -f *.o *.so main


## Building dependencies

points.o: points.h points.c
	# -c means "make an object file"
	gcc -c points.c

points.so: points.o
	# Wrap the object file into a shared object.
	gcc -shared -o points.so points.o -lm

main.o: main.c
	# Compile the main file into object code.
	gcc -c main.c

main: main.o points.o
	# Squish the main object code and points object code into one executable file.
	# The -lm tells the linker to also include the math library, which is named "m".  Or rather, libm.
	gcc -o main main.o points.o -lm
	chmod +x main
