import hotels from './hotels.js';

class DataSource {
    static searchHotel(keyword) {
        return new Promise((resolve, reject) => {
            const filteredHotels = hotels.filter(hotel => hotel.hotelLocation.toUpperCase().includes(keyword.toUpperCase()));
            if (filteredHotels.length) {
                resolve(filteredHotels);
            } else {
                reject(`${keyword} is not found`);
            }
        });
    }
}

export default DataSource;