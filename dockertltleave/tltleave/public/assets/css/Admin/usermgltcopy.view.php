/*************************************************** Style UserManagement *********************************************/

/******************* Style Button Add ****************/
* {
font-family: Helvetica, Arial, Verdana ;
}
#btn-add {
display: flex;
justify-content: flex-end;
margin-right: 4rem;
}
#btn-add button {
width: 15rem;
height: 3rem;
margin-left: 2rem;
border-radius: 5rem;
font-size: large;
border: none;
}

#btn-add button:first-of-type {
background-color: #F8B550;
box-shadow :0px 5px 5px 1px rgba(85, 85, 85, 0.25);
}

#btn-add button:nth-child(2) {
background-color: rgb(174,144,99, 70%);
box-shadow :0px 5px 5px 1px rgba(85, 85, 85, 0.25);
}

/*********************** Style search - sort - display **************/

#search-sort-display {
display: flex;
justify-content: space-between;
align-items: center;
margin: 0 4rem;
height: 4rem;
background-color: rgb(174,144,99, 10%);
border-radius: 1rem;
}

.sort-display {
display: flex;
align-items: center;
}

.sort-by {
display: flex;
align-items: center;
margin-right: 5rem;
font-size: larger;
}

.display-type{
font-size: larger;
margin-right: 5rem;
}
.display-type i:first-of-type{
margin-right: 1rem;
}


#user-search {
margin-left: 3rem;
width: 25rem;
height: 2.5rem;
border-radius: 1rem;
border: 1px solid rgb(174,144,99, 30%);

}

::placeholder {
font-size: larger;
font-style: italic;
color: rgb(174,144,99, 50%);
text-align: center;
}

.form-select {
border: none;
background-color: rgb(174,144,99, 0%);

}

/**************************** Container Grid ***********************/

.container-grid {
display: flex;
justify-content: center;
}
/***************************** Grid Cards **************************/

.grid-cards {
display: grid;
grid-template-columns: 1fr 1fr 1fr 1fr;
grid-template-rows: 1fr 1fr;
grid-template-areas:
"grid-item1 grid-item2 grid-item3 grid-item4"
"grid-item5 grid-item6 grid-item7 grid-item8";
align-items: center;
justify-content: center;
justify-items: center;
gap: 5rem;
width: 120rem;
margin-top: 2rem;

}

.grid-item1 {
grid-area: grid-item1;
background: linear-gradient(180deg,rgb(174,144,99,80%), white, white);
padding-top: 1rem;
box-shadow :0px 15px 10px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;

}
.grid-item2 {
grid-area: grid-item2;
background: linear-gradient(180deg, #F8B550, white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;
}
.grid-item3 {
grid-area: grid-item3;
background: linear-gradient(180deg,rgb(174,144,99,80%), white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;
}
.grid-item4 {
grid-area: grid-item4;
background: linear-gradient(180deg, #F8B550, white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;
}
.grid-item5 {
grid-area: grid-item5;
background: linear-gradient(180deg,rgb(174,144,99,80%), white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;
}
.grid-item6 {
grid-area: grid-item6;
background: linear-gradient(180deg, #F8B550, white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;
}
.grid-item7 {
grid-area: grid-item7;
background: linear-gradient(180deg, #F8B550, white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;
width: 20rem;
}
.grid-item8 {
grid-area: grid-item8;
background: linear-gradient(180deg,rgb(174,144,99,80%), white, white);
padding-top: 1rem;
box-shadow :0px 15px 20px 1px rgba(85, 85, 85, 0.25);
border-radius: 2rem;border-radius: 2rem;
width: 18rem;
}


.cercle {
width: 6rem;
height: 6rem;
border-radius: 100%;
overflow: hidden;
box-shadow :1px 5px 10px 1px rgba(0, 0, 0, 0.25);
margin-bottom: 1rem;
list-style-type: none;
}

.photo {
display: flex;
flex-direction: column;
align-items: center;
}

h3, p {
margin-bottom: 0px;
font-size: larger;
}

.bi-pencil-fill {
margin-bottom: 1rem;
margin-left: 15rem;
font-size: larger;
color: #F8B550;
}

.photo p:nth-of-type(2) {
background-color: rgb(174,144,99,30%) ;
border-radius: 1rem;
height: 1.5rem;
width: 12rem;

}

.position {
text-align: center;
align-content: center;
}