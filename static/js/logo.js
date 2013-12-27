float x=1;
float y=1;
float z=1;
	
float angle;  
float x=1; 

void setup(){
	frameRate(15);
	size(380,340);
	}	
	
void draw(){
	background(0, 0);
	noFill();
  strokeWeight(5);
	stroke(85,85,85);

	cosine = cos(1+x); 
	
	translate(width/2, height/2);  
  scale(0.6);
	rotate(cos(1+x));  
	rectMode(CENTER);
	rect(0, 0, 155, 155);
	
	rotate(cos(x/2));  
	rectMode(CENTER);
	rect(0, 0, 275, 275);
	
	rotate(sin(x/2));  
	rectMode(CENTER);
	rect(0, 0, 200, 200);
	
	rotate(radians(1-z)); 
	rect(0, 0, 250, 250);
	
	rotate(radians(1+y)); 
	scale(sin(x/4));
	rect(0, 0, 240, 240);
	
	rotate(radians(1+y)); 
	scale(cos(x/4)+1.5);
	rect(0, 0, 200, 200);
	
  noStroke();
  fill(0,0,0, 50);
	rotate(cos(x/2));  
	rectMode(CENTER);
	rect(0, 0, 200, 200);

	x+=0.05;
	y+=0.5;
	z-=1;
	
	
	//popMatrix();
	//text(cos(x)+'Scaeva Scribere',20,20);
	
	}


