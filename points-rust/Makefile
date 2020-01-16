
## User-friendly targets.

all: inline preload run

preload: rust
	php -d opcache.preload="preloader.php" -d opcache.enable_cli=true preload.php

inline: rust
	php -d opcache.enable_cli=true inline.php

clean:
	rm -rf points/target

run: rust
	./points/target/release/points


## Building dependencies

rust:
	cd points && cargo build --release

tests:
	cd points && cargo test
