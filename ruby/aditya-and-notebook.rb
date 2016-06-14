num = gets.chomp.strip.to_i

data = Hash.new


data[1] = 1
data[2] = 2
data[3] = 2
data[4] = 3
data[5] = 3
data[6] = 4

sum = 0

if num <= 6
  (1..num).each do |i|
    sum += data[i]
  end
else
  sum = 15
  (7..num).each do |i|
    if  data[i - 1] != data[i - 2]
      data[i] = data[i - 1]
    else
      data[i] = data[i - 1] + 1
    end
     sum += data[i]
  end
end

puts sum