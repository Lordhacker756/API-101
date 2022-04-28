# API 101

This API is used to integrate the database workflow without having to worry about cross-platform compatibility

## Usage

This API currently has three end-points, one for reading data stored in the database which can be accessed by performing a fetch request on the URL
```javascript
https://3pixelsonline.in/api/index.php?token=UniqueToken
```


The other endpoint is one that is going to be used the most in submitting data from forms created using multiple sources to a singular database
```javascript
https://3pixelsonline.in/api/insert.php?token=UniqueToken
```
**Note - For inserting data, the data must be sent as a POST request** 

The Third end-point is used for sending email. This is a concept based on the idea of having a PHP Mailer service on the cloud which can be accessed from any application regardless of the language it is coded upon.

**How To Use Email API**
This API needs two parameter, One is the API Token passed in the URL and the other one is the data which can be sent as a post request, either using a form or AJAX. This data will be used to curate the email as per your wish. So feel free to spin around the data as you like! The url to hit looks something like this

```javascript
https://3pixelsonline.in/api/email/index.php?token=API_TOKEN
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)