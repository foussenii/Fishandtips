var fornis = document.getElementById('fornis');
var Router = ReactRouter.Router;
var Route =  ReactRouter.Route;
var DefaultRouter =  ReactRouter.DefaultRoute;
var Link = ReactRouter.link;
var RouteHandler = ReactRouter.RouteHandler;

class AddComponent extends React.Component {
  constructor() {
    super();
    this.update = this.update.bing(this);
    this.submit = this.submit.bing(this);

  }
  update(){
    this.setState({query: this.input.value});

  }
  submit(e){
    e.preventDefault();
    this.props.on Submit({task: this.props.name + ' '+ this.input.value});
    this.input.value = "";

  }
  render(){
    return(
      <form onSubmit={this.submit}>
      <h2> assigne : </h2>
      <input ref={(input) => this.input = input} onChange={this.update} placeholder="doit faire..."/>
      <button>ajouter</button>
      </form>
    );
  }
}

class UsersComponent extends React.Component{
  render(){
    return (
      <div>
      <h1>utilisateur</h1>
      </div>
    );
  }
}
ReactDom.render((
  <Router>
  <route path="/" component={AddComponent/>
  <route path="/users" component={UsersComponent}/>
  </Router>

),fornis);
