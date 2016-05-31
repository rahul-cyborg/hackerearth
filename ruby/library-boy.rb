n = gets.chomp.strip.to_i
data  = {}
n.times do
  str = gets.chomp.strip
  char = str.chr
  data[char] = 0 if data[char].nil?
  data[char] += 1
end

sum = 0;

data.each do |key,value|
  temp = value % 10;
  temp = 1 if temp >=1 
  val = value / 10
  total = val + temp
  sum += total
end

puts sum