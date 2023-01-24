let csfr_token = document.getElementsByName('csrf-token')[0].getAttribute('content');
const base_url = document.getElementsByName('base-url')[0].getAttribute('content');
let btnHistoricals = document.getElementById('view-historicals');

btnHistoricals.addEventListener('click', (event)=>{
    $.ajax({
        url:base_url+'/historicals/'+btnHistoricals.dataset.vehicle,
        method:'get',
        data: {
            "_token": csfr_token
        },
        success:function(response) {
            let tableBody = document.getElementById('historical-table-body');
            let html = '';
            for (let i = 0; i < response.length; i++) {
                html += `
                    <tr>
                        <td>${response[i].users.name}</td>
                        <td>${response[i].users.last_names}</td>
                        <td>${response[i].users.email}</td>
                    </tr>
                `;                
            }
            tableBody.innerHTML = html;
        }
    });
});
