<snippet>
  <content>
# ChyWaWa
by [10000TB](https://github.com/10000TB)

MVC PHP Web App with video uploading,user management system, video categories listings features <br>
- mysql stores users data, with some help from redis implement:  example.com/username to access user profile page<br>
- heavily used redis to store videos listing data and video meta data<br>
- integrated js large file upload plugin: plupupload
- youtube like video url  example.com/play?v=videoId (currently md5 hash) (recommend using hashId to generate youtube like hash from number)
- video recommendation for each video (Hadoop MapReduce generate top 40 recommendation based on the similarity of videos)




   
## Installation
1. Download the file (direct download, git clone)
2. Specify the Web Server root dir as the path to the location of this project in your server
3. Set up mySql Database(change the credentials of the mysql connecton in Config.Development.php)
4. Set up Redis in your server
5. The app should now available at localhost
⋅⋅⋅distributed version: 
⋅⋅⋅a) PHP session is handled by redis, u can dedicate session store in one redis, or among multiple redis instances.
⋅⋅⋅b) Services can be separated from WWW files, and static contents, intially, an easy way from one server to multiple server is duplciate all files, and use differnet parts as to which server it represents:
        


## Usage
TODO: Write usage instructions
## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D
## History
TODO: Write history
## Credits
TODO: Write credits
## License
TODO: Write license
</content>
  <tabTrigger>readme</tabTrigger>
</snippet>
