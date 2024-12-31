const membershipApi = '/api/membership';

console.log("js file exists");


function addPlan(button) {
    console.log(button);
    planId = button.dataset.id;
    console.log(planId)

    data = new URLSearchParams({
        plan_id: `${planId}`
    });

    request = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: data.toString()
    };
    console.log(request);

    fetch(membershipApi, request)
    .then(async response =>  {
        if(response.ok) {
            const data = await response.json();
            console.log(data);
            alert(data["message"]);
        }
    });
}