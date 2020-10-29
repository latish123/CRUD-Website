
let create_button=document.getElementById('create-button');
let create_form=document.getElementById('create-form');
let isCreateFormDisplay=false;

let update_form=document.getElementById('update-form');
let edit_button=document.getElementById('edit-button');
let isUpdateFormDisplay=false;

let delete_button=document.getElementById('delete-button');
let delete_form=document.getElementById('delete-form');
let isDeleteFormDisplay=false;



create_button.onclick=()=>{
	if(isCreateFormDisplay==false){
		create_form.style.display='block';
		isCreateFormDisplay=true;
    }
    else{
    	create_form.style.display='none';
		isCreateFormDisplay=false;

    }

}

 edit_button.onclick=()=>{
 	console.log('button clicked');
	if(isUpdateFormDisplay==false){
		update_form.style.display='block';
		isUpdateFormDisplay=true;
    }
    else{
    	update_form.style.display='none';
		isUpdateFormDisplay=false;

    }

}

 delete_button.onclick=()=>{
	if(isDeleteFormDisplay==false){
		delete_form.style.display='block';
		isDeleteFormDisplay=true;
    }
    else{
    	delete_form.style.display='none';
		isDeleteFormDisplay=false;

    }

}