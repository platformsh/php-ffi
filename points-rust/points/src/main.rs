use points;

fn main() {

    let p1 = points::Point{x: 3, y: 4};
    let p2 = points::Point{x: 7, y: 9};

    println!("Distance is: {}", points::compute_distance(p1, p2));
}
