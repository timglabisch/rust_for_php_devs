# sudo dtrace -n 'pid$target::malloc:entry' -c "./target/release/malloc"

pub fn foo() -> &'static str {
    return "fooooo";
}

fn main() {

    println!("------------");

    loop {
        println!("{}", foo());
    }
}