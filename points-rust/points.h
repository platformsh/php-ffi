#define FFI_SCOPE "POINTS"
#define FFI_LIB "./points/target/release/libpoints.so"

struct Point {
  int8_t x;
  int8_t y;
};

double distance(struct Point p1, struct Point p2);
