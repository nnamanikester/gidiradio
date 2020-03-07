import axios from 'axios'

const siteInfo = {
    id: null,
    site_name: null,
    logo: null,
    favico: null,
    link: null,
    email: null,
    phone: null,
    footer_text: null,
    signboard_title: null,
    signboard_button_text: null,
    signboard_button_link: null,
    signboard_image: null,
    default_thumbnail: null,
    tag_line: null,
    facebook: null,
    twitter: null,
    instagram: null,
    radio_station: null,
    created_at: null,
    updated_at: null
}

axios.get('/api/site-settings')
    .then(res =>  {
        res.data.forEach(item => {
            Object.keys(item).map(key => {
                siteInfo[key] = item[key]
            })
        })
    })
    .catch(err => {
        const error = err
    })

const db =  {
    siteInfo
}

export default db