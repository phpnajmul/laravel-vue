import moment from "moment";

export function formatDate(value) {
    if (value){
        return moment(String(value)).format('YYYY-MM-DD');
    }
}

export function formatTime(timeValue){
    if (timeValue){
        return moment(String(timeValue)).format('h:mm:ss a');
    }
}
