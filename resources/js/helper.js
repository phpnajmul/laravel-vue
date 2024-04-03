import moment from "moment";

//For view page date
export function formatDate(value) {
    if (value){
        return moment(String(value)).format('YYYY-MM-DD');
    }
}


//For view page time
export function formatTime(timeValue){
    if (timeValue){
        return moment(String(timeValue)).format('h:mm:ss a');
    }
}
