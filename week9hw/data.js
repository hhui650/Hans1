order = new Order( new Customer( "John Doe", "1234 Sesame Street", "San Francisco", "California", "94010" ), 
	[ 
		new LineItem( 2, new Product( "Milk", 2, true, "2% milk" ) ),
		new LineItem( 1, new Product( "Cereal", 3, true, "Whole grain" ) ),
		new LineItem( 3, new Product( "Bananas", 2.5, true, "Organic" ) ),
		new LineItem( 5, new Product( "Apples", 4, true, "Red" ) )
	] );