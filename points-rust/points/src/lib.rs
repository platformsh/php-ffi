
#[repr(C)]
pub struct Point {
    pub x: i8,
    pub y: i8,
}

pub fn compute_distance(p1: Point, p2: Point) -> f64 {
    let a_squared = (p2.x as f64 - p1.x as f64).powf(2.0);
    let b_squared = (p2.y as f64 - p1.y as f64).powf(2.0);

    (a_squared + b_squared).sqrt()
}

#[no_mangle]
pub unsafe extern "C" fn distance(p1: Point, p2: Point) -> f64 {
    compute_distance(p1, p2)
}

#[cfg(test)]
mod tests {
    // Note this useful idiom: importing names from outer (for mod tests) scope.
    use super::*;

    #[test]
    fn test_distance() {
        let p1 = Point{x: 3, y: 2};
        let p2 = Point{x: 6, y: 6};
        assert_eq!(compute_distance(p1, p2), 5.0);
    }
}
