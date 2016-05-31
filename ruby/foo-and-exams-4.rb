num = gets.chomp.strip.to_i

input = []

num.times do
  input << gets.chomp.strip.split(' ').map(&:to_i)
end

out = []

input.each do |arr|
  k = arr[4]
  
  #print arr 
  
  (1..10000000000000).each do |t|
    fn = (arr[0] * (t ** 3)) + (arr[1] * (t ** 2)) + (arr[2] * t) + arr[3]
    if fn > k
      out << t - 1
      break;
    end
  end
end

puts out