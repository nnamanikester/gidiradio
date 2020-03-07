import axios from 'axios'

const db = {

}

axios.get('/api/site-info')
    .then(res =>  {
        console.log(res.data)
    })
    .catch(err => {
        const error = err
    })

export default db