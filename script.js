

let word
    document.addEventListener('DOMContentLoaded',()=>{
         word= document.querySelectorAll('.name') 
    })

    let input = document.getElementById('search')
    input.addEventListener('keyup',search)

    

    function search(){

        for(i in word){
    
            
            let  a = word[i].innerText.toLowerCase()
                    
    
            if(a.indexOf(input.value.toLowerCase())!=-1){
                word[i].parentElement.style.display = ''
            }else{
                 word[i].parentElement.style.display = 'none'
                 
    
            }
    
            
        }
    }

