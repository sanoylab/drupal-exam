console.log('from module')
const dom = document.querySelector("#render-chart");

const getChart = async () => {  
  
  const response = await fetch("/api/v1/nodes");
  const data = await response.json();

  


  var groupedData=groupArrayOfObjects(data,"type");
  
  
const cat = Object.entries(groupedData);

console.log(cat);//will be the Males 

const labels = [];
const values = [];

for(var i=0; i<cat.length;i++){
  labels.push(cat[i][0]);
  values.push(cat[i][1].length)

}
const datas = {}

datas.labels = labels;
datas.values = values

console.log(datas);





new frappe.Chart( "#render-chart", {
  data: {
    labels: labels,
    datasets: [{values: values}]
  },
  type: 'bar',
  height: 180,
  colors: ['red']
});


  

};

getChart();

function groupArrayOfObjects(list, key) {

  return list.reduce(function(rv, x) {
    (rv[x[key]] = rv[x[key]] || []).push(x);
  

    return rv;
  }, {});
  
};

