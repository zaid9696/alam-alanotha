export default async function search(searchValue){


    try{

        const result = await  fetch(`${femaleUri.root_uri}/wp-json/female/v1/search?term=${searchValue}`);
        const data = await result.json();

        // console.log(data)

        return data;


    }

    catch(err){

        // console.log(err)
    }


}