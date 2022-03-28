'use strict';

exports.ok = function(values, res){
    var data = {
        'status':200,
        'values':values
    };

    res.json(data);
    res.end();
}


exports.tampilnested = function(values,res){
    const hasil = values.reduce((akumulasi, item)=>{
        if (akumulasi[item.username]) {
            const group = akumulasi[item.username];
            if(Array.isArray(group.role)){
                group.role.push(item.role)
            }else{
                group.role = [group.role, item.role]
            }
        }else{
            akumulasi[item.username] = item
        }
        return akumulasi
    },{})

    var data = {
        'status':200,
        'values':hasil
    };

    res.json(data);
    res.end();

}