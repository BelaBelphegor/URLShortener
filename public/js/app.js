var AppViewModel = function()
{
	var self = this;
	self.chosenDataID = ko.observable();
	self.chosenData = ko.observable();
	self.chosenSubdata = ko.observable();

	self.goToData = function(data)
	{
		location.hash = data;
	}

	self.goToSubdata = function(subdata)
	{
		location.hash = subdata.data + '/' + subdata.id;
	}

	Sammy(function()
	{
	}).run();
};

ko.applyBindings(new AppViewModel());

