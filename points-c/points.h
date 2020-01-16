#define FFI_SCOPE "POINTS"
#define FFI_LIB "./points.so"

// FFI_LIB uses the system include path, and cwd is NOT included in that by default.

// Also, all comments must come after all #define's, due to a bug in PHP's FFI parser: https://bugs.php.net/bug.php?id=79075

struct point {
    int     x;
    int     y;
};

double distance(struct point first, struct point second);
