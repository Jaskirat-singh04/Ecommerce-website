function update(){
	//price fields ==> even - ind.price / odd-total price
	const price = document.getElementsByTagName('strong');
	//quantity fields ===>from index 1
	const qtn = document.getElementsByTagName('input');
	
	//updating values 
	for(i=0;i< (price.length);i++){
		price[i+1].innerHTML = qtn[(i/2) + 1].value * price[i].innerHTML;
		i++;
	}
	
	updateBill();
}
function updateBill(){
	//price fields ==> even - ind.price / odd-total price
	const price = document.getElementsByTagName('strong');
	let sub_total = 0; 
	for(i=0;i< (price.length);i++){
		sub_total = sub_total + parseInt(price[i+1].innerHTML) ;
		i++;
	}
	let gst = (10/100) * sub_total;   //
	
	
	//updating
	document.getElementById("subtotal").innerHTML = sub_total;
	document.getElementById("gst").innerHTML = gst.toFixed(2);
	document.getElementById("grand").innerHTML = sub_total + 51 + gst;
	document.getElementById("txn_amt").value = "21";
	
}
