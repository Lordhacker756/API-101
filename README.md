# Crud API

This API is used to integrate the database workflow without having to worry about cross-platform compatibility

## Usage

This API currently has two end-points, one for reading data stored in the database which can be accessed by performing a fetch request on the URL
```javascript
https://3pixelsonline.in/api/index.php?token=UniqueToken
```


The other endpoint is one that is going to be used the most in submitting data from forms created using multiple sources to a singular database
```javascript
https://3pixelsonline.in/api/insert.php?token=UniqueToken
```
**Note - For inserting data, the data must be sent as a POST request** 

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)