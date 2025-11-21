
// untuk toggle
const tombol = document.querySelectorAll(".tombol");

tombol.forEach((el) => {
    el.addEventListener("click", async(e) => {
        e.preventDefault();
       const id = e.target.dataset.id
        const res = await fetch(`/api/toggle/${id}`,{
            method:'PUT',
            headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        })
        const result = await res.json();
        const teks = el.previousElementSibling
        if(result.message.status == true){
            e.target.className = "btn btn-success"
            e.target.textContent = "OFF"
            teks.textContent = "sedang menyala"
        }else{
            e.target.className = "btn btn-secondary"
            e.target.textContent = "ON"
            teks.textContent = "tidak menyala"
        }
    });
});

