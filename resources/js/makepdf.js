//this file will handle all the client side geenration of PDF's in this project
//repititive functions or utility functions
function add_header_image(doc){
  doc.addImage("images/fiber_fields_header.JPEG", "JPEG", 0, 0, 210, 30);
}
function add_footer_image(doc){
  doc.addImage("images/footer.jpeg", "JPEG", 10, 275, 170, 20)
}
function add_page_num(doc,page_num) {
  doc.text(180,285, 'Page ' + page_num);
}

//function attched to batch-details.php for making pdf of batch details
function print_batch_details(batch_data){
  //console.log(batch_data);\
  var page_num = 1;
  var finalY = 45;
  var doc = new jsPDF('p', 'mm', [210, 297]);
  add_header_image(doc)
  doc.setFont("arial");
  doc.setFontSize(40);
  doc.text("Batch Details Report", 43 , finalY)
  finalY += 15;
  doc.setFontSize(16);
  doc.text("Batch ID: " + batch_data.batch_no ,10,finalY )
  doc.text("Available Units: " + batch_data.avail_units ,150,finalY )

  // generation of varaibles for table
  var head_title = [['Sr.' , 'Party Name'  , 'Unit Price' , 'Total Units' , 'Total Sale' , 'Total Purchase' , 'Profit']]
  var body_arr = new Array();

  //getting these variable from response 0
  var pr_price = parseInt(batch_data.data[0].unit_price);

  // for loop to generate table body
  for(var i =1;i<batch_data.data.length;i++){

    //var made after processing on data
    var tmp_sale = parseInt(batch_data.data[i].unit_price) * parseInt(batch_data.data[i].weight);
    var tmp_purch = pr_price * parseInt(batch_data.data[i].weight);
    var tmp_diff = parseInt(tmp_sale - tmp_purch);

    var bdy = [i , batch_data.data[i].pt_name , batch_data.data[i].unit_price , batch_data.data[i].weight , tmp_sale , tmp_purch , tmp_diff];
    body_arr.push(bdy);

  }

  // drawing table on page
  doc.autoTable({
    startY: finalY + 5,
    theme: 'grid',
    head: head_title,
    body: body_arr,
  })
  finalY = doc.lastAutoTable.finalY + 10;

  doc.text("Total Profit: " + batch_data.profit ,150,finalY)
  add_footer_image(doc)
  add_page_num(doc,page_num)
  console.log(body_arr);
  //var file_time = today.getFullYear() + '-' + (today.getMonth() + 1 ) + '-' + today.getDate() + ':' + ((today.getHours()+24) % 12 || 12) + ':' + today.getMinutes() + ':' + today.getSeconds();
  var file_name = "batch-details-" + batch_data.batch_no + ".pdf";
  doc.save(file_name);
}



//function to make pdf of sale order
function create_sale_order_pdf(order_data){

  var finalY = 45;
  var doc = new jsPDF('p', 'mm', [210, 297]);
  add_header_image(doc)
  // generation of varaibles for table
  var head_title = [['Sr.' , 'Item Bale'  , 'Item Batch' , 'C/L' , 'Gross Weight' , 'Tare' , 'Net Weight']]
  var body_arr = new Array();
  var arr_length = order_data.length;
  //getting these variable from response 0
  console.log("arr-length: " + arr_length);
  console.log(order_data)
  var pt_name = order_data[(arr_length-2)].pt_name;
  var order_id = parseInt(order_data[(arr_length-1)].ord_id);
  doc.setFont("arial");
  doc.setFontSize(40);
  doc.text("Sale Order", 80 , finalY)
  finalY += 15;
  doc.setFontSize(16);
  doc.text("Order ID: " + order_id ,10,finalY )
  doc.text("Party Name: " + pt_name ,117,finalY )
  var total_weight = 0;
  // for loop to generate table body
  for(var i =0;i<(arr_length-2);i++){



    var bdy = [(i+1) , order_data[i].bale , order_data[i].batch , order_data[i].cl , order_data[i].gweight , order_data[i].tare , order_data[i].nweight];
    total_weight += parseInt(order_data[i].nweight);
    body_arr.push(bdy);

  }

  // drawing table on page
  doc.autoTable({
    startY: finalY + 10,
    theme: 'grid',
    head: head_title,
    body: body_arr,
  })
  finalY = doc.lastAutoTable.finalY + 10;
  doc.text("Total Weight: " + total_weight ,150,finalY)
  add_footer_image(doc)
  //console.log(order_data);
  var file_name = "Sale-Order-" + order_id + ".pdf";
  doc.save(file_name);
}
