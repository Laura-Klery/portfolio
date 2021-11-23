/* Composant menu */
function burger_html(selecteur,param_insert){
	var param={
		balises:'.main-menu,.menu-fond',
		css_open:0,
		css_close:'-100%',
		text_open:'x',
		text_close:'&equiv;',
		listener:'click',
		dir:'left'
	};
	if(typeof param_insert == 'object'){
		for(const key_insert in param_insert){
			for(const key in param){
				if(key_insert == key){
					param[key]=param_insert[key_insert];
				}
			}
		}
	}
	document.querySelectorAll(selecteur).forEach(function(element){
		element.addEventListener(param.listener,function(){
			let dir=param.css_open,
			text=param.text_open;
			if(this.innerHTML == text){
				dir=param.css_close;
				text=param.text_close;
			}
			this.innerHTML=text;
			document.querySelectorAll(param.balises).forEach(function(element){
				element.style[param.dir]=dir;
			});
		});
	});
}
burger_html('.btn-burger');

/* Composant Accordeon */
const accordionBtns = document.querySelectorAll('.accordion');
accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle('is-open');
    let content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
    }
  };
});

/* Traitement de formulaire */
function verif_form(form_selecteur,param_insert){
	var param={
		input_verif_text:'.js-verif-text',
		input_verif_email:'.js-verif-email',
		input_verif_cgu:'.js-verif-cgu',
		select_verif:'.js-verif-select',
		balise_error:'.form-error',
		class_error:'form-error-hidden',
		onkeyup:true,
		default_data_min:1,
		attr_data_min:'data-min',
		default_data_max:10,
		attr_data_max:'data-max',
	},
	convert_number=function(data,retour){
		if(typeof data == 'string'){
			data=parseInt(data);
			if(!isNaN(data)){
				retour=data;
			}
		}
		return retour;
	},
	return_error=function(element,error){
		if(element.parentElement.querySelector(param.balise_error)!==null){
			if(error){
				element.parentElement.querySelector(param.balise_error).classList.add(param.class_error);
			}else{
				element.parentElement.querySelector(param.balise_error).classList.remove(param.class_error);
			}
		}
		return error;
	},
	verif_nbcara=function(element){
		let nbcara=element.value.length;
		let min=convert_number(element.getAttribute(param.attr_data_min),param.default_data_min);
		let max=convert_number(element.getAttribute(param.attr_data_max),param.default_data_max);
		if(min>=max){max=min+1;}
		if(nbcara >= min && nbcara <= max){
			return return_error(element,true);
		}
		return return_error(element,false);
	},
	verif_email=function(element){
		if(verif_nbcara(element)){
			let text= element.value;
			let pos = text.indexOf('@');
			if(pos >= 2){
				text = text.substring(pos+1);
				pos = text.indexOf('@');
				if(pos==-1){
					pos = text.indexOf('.');
					if(pos >= 2){
						text = text.substring(pos+1);
						if(text.length >= 2){
							return return_error(element,true);
						}
					}
				}
			}
		}
		return return_error(element,false);
	},
	verif_cgu=function(element,elform){
		elform.querySelectorAll('[type="submit"]').forEach(function(el){
			if(element.checked){
				el.removeAttribute('disabled');
			}else{
				el.setAttribute('disabled','disabled');
			}
		});
		return return_error(element,element.checked);
	},
	verif_select=function(element){
		if(element.value!=''){
			return return_error(element,true);
		}
		return return_error(element,false);
	};

	if(typeof param_insert == 'object'){
		for(const key_insert in param_insert){
			for(const key in param){
				if(key_insert == key){
					param[key]=param_insert[key_insert];
				}
			}
		}
	}
	document.querySelectorAll(form_selecteur).forEach(function(elform){
		// vérification du nombre de caractere
		elform.querySelectorAll(param.input_verif_text).forEach(function(el){
			if(param.onkeyup){
				el.onkeyup=function(){verif_nbcara(this);}
			}
			el.onchange=function(){verif_nbcara(this);}
		});
		// vérification d'un mail valide
		elform.querySelectorAll(param.input_verif_email).forEach(function(el){
			if(param.onkeyup){
				el.onkeyup=function(){verif_email(this);}
			}
			el.onchange=function(){verif_email(this);}
		});
		// vérification cgu
		elform.querySelectorAll(param.input_verif_cgu).forEach(function(el){
			el.onchange=function(){
				verif_cgu(this,elform);
			}
		});
		// vérification select
		elform.querySelectorAll(param.select_verif).forEach(function(el){
			el.onchange=function(){
				verif_select(this);
			}
		});

		// vérification avant envoie du formulaire du nombre de caractere et du mail valide et case a cocher CGU
		elform.onsubmit=function(){
			let retour_submit=true;
			this.querySelectorAll(param.input_verif_text).forEach(function(eltext){
				if(!verif_nbcara(eltext)){retour_submit=false;}
			});
			this.querySelectorAll(param.input_verif_email).forEach(function(eltext){
				if(!verif_email(eltext)){retour_submit=false;}
			});
			this.querySelectorAll(param.input_verif_cgu).forEach(function(eltext){
				if(!verif_cgu(eltext,elform)){retour_submit=false;}
			});
			this.querySelectorAll(param.select_verif).forEach(function(eltext){
				if(!verif_select(eltext)){retour_submit=false;}
			});
			return retour_submit;
		}
	});
}
verif_form('.js-form-verif',{default_data_max:100,});