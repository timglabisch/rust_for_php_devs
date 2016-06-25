use std::rc::Rc;

struct A {
    pub b : Option<Rc<Box<B>>>
}

struct B {
    pub a: Option<Rc<Box<A>>>
}

fn main() {

    println!("------------");

    for x in 0..10000000 {
        let mut a = Rc::new(Box::new(A { b: None }));
        let mut b = Rc::new(Box::new(B { a: Some(a) }));
    }

}
